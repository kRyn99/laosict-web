function Validator(options) {
    function getParent(element, selector) {
        while (element.parentElement) {
            if (element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }

    var selectorRules = {};

    function validate(inputElement, rule) {
        var errorElement = getParent(
            inputElement,
            options.formGroupSelector
        ).querySelector(options.errorSelector);
        var errorMessage;
        var rules = selectorRules[rule.selector];
        for (var i = 0; i < rules.length; i++) {
            switch (inputElement.type) {
                case "checkbox":
                case "radio":
                    errorMessage = rules[i](
                        formElement.querySelector(rule.selector + ":checked")
                    );

                    break;
                default:
                    errorMessage = rules[i](inputElement.value);
            }

            if (errorMessage) break;
        }

        if (errorMessage) {
            errorElement.innerText = errorMessage;
            getParent(inputElement, options.formGroupSelector).classList.add(
                "invalid"
            );
        } else {
            errorElement.innerText = "";
            getParent(inputElement, options.formGroupSelector).classList.remove(
                "invalid"
            );
        }
        return !errorMessage;
    }

    var formElement = document.querySelector(options.form);
    if (formElement) {
        formElement.onsubmit = function (e) {
            e.preventDefault();

            var isFormValid = true;

            options.rules.forEach(function (rule) {
                var inputElement = formElement.querySelector(rule.selector);

                var isValid = validate(inputElement, rule);
                if (!isValid) {
                    isFormValid = false;
                }
            });

            if (isFormValid) {
                if (typeof options.onSubmit === "function") {
                    var enableInputs = formElement.querySelectorAll("[name]");
                    var formValues = Array.from(enableInputs).reduce(function (
                        values,
                        input
                    ) {
                        switch (input.type) {
                            case "radio":
                                values[input.name] = formElement.querySelector(
                                    'input[name="' + input.name + '"]:checked'
                                ).value;
                                break;

                            case "checkbox":
                                if (!input.matches(":checked")) {
                                    values[input.name] = "";
                                }

                                if (!Array.isArray(values[input.name])) {
                                    values[input.name] = [];
                                }
                                values[input.name].push(input.value);
                                break;
                            case "file":
                                values[input.name] = input.files;
                                break;
                            default:
                                values[input.name] = input.value;
                        }
                        return values;
                    },
                    {});
                    options.onSubmit(formValues);
                } else {
                    formElement.submit();
                }
            }
        };

        options.rules.forEach(function (rule) {
            if (Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test);
            } else {
                selectorRules[rule.selector] = [rule.test];
            }

            var inputElements = formElement.querySelectorAll(rule.selector);
            Array.from(inputElements).forEach(function (inputElement) {
                inputElement.onblur = function () {
                    validate(inputElement, rule);
                };
                inputElement.oninput = function () {
                    var errorElement = getParent(
                        inputElement,
                        options.formGroupSelector
                    ).querySelector(options.errorSelector);
                    errorElement.innerText = "";
                    getParent(
                        inputElement,
                        options.formGroupSelector
                    ).classList.remove("invalid");
                };
            });
        });
    }
}
Validator.isRequiered = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            return value ? undefined : message || "vui lòng nhập trường này";
        },
    };
};


Validator.isEmail = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(value)
                ? undefined
                : message || "Trường này không hợp lệ.";
        },
    };
};

Validator.isName = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /[0-9!@#$%^&*(),.?":{}|<>]/;
            return regex.test(value)
                ? message ||
                      "Trường này không được chứa số hoặc ký tự đặc biệt."
                : undefined;
        },
    };
};
Validator.isNumberPhone = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /^\d{8,13}$/;
            return regex.test(value)
                ? undefined
                : message ||
                      "Vui lòng nhập số điện thoại hợp lệ (từ 8 đến 13 chữ số)";
        },
    };
};

Validator.minLength = function (selector, min, message) {
    return {
        selector: selector,
        test: function (value) {
            return value.length >= min
                ? undefined
                : message || "mật khẩu phải dài hơn 6 kí tự";
        },
    };
};

Validator.isConfirmed = function (selector, getConfirmValue, message) {
    return {
        selector: selector,
        test: function (value) {
            return value === getConfirmValue()
                ? undefined
                : message || "mời nhập lại giá trị";
        },
    };
};
