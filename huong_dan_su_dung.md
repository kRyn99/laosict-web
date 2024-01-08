## Các nội dung lấy từ CMS

Các nội dung dưới đây sẽ định kỳ tự động lấy về từ CMS theo 2 api cung cấp (ấy danh sách đối tác đồng hành, lấy danh sách loại chương trình)

Nguyên tắc : Hệ thống kiểm tra theo Id của API, nếu có sẽ bỏ qua, nếu chưa có thì thêm mới và cập nhật ID của API.

1. Loại chương trình

Xem trong menu "Quản trị nội dung > Loại chương trình"

2. Đối tác đồng hành 

Xem trong menu "Quản trị nội dung > Đối tác đồng hành"

3. Danh sách chương trình 

Xem trong menu "Quản trị nội dung > Chương trình quyên góp"

Chú ý : các chương trình đều thuộc về một đối tác đồng hành duy nhất.

## Các thiết lập cứng của hệ thống

Truy cập menu "Các thiết lập"


## Các chuyên mục

Truy cập menu "Các chuyên mục"
Bao gồm các chuyên mục cha và con theo menu, cấu trúc ví dụ dưới đây:

1. Chuyên mục cha 

```textmate
-   Ví hoa vàng
-	Trái tim voi vàng
-	Đất voi vàng
-	Hoàn cảnh quyên góp
-   Tin tức cộng đồng
```

2. Chuyên mục con, ví dụ :
Chuyên mục hoàn cảnh quyên góp có các chuyên mục con (Vì trẻ em, người già, người khuyết tật)

Chú ý : hệ thống sẽ thiết kế chuyên mục theo 2 cấp (cha và con)

Chú ý : các chuyên mục cha sẽ có phần banner để config banner cho trang chuyên mục.
## Các bài viết

1. Loại bài viết hiển thị theo category - dạng tin tức => xem trong menu "Các bài viết"
Loại bài này sẽ gắn với các chuyên mục Cha của hệ thống (Ví voi vàng, ....) chỉ đơn thuần là bài tin tức, Khi bấm vào chi tiết sẽ hiển thị dạng popup

2. Loại bài viết Hoàn cảnh => Xem trong menu "Các hoàn cảnh"
Loại bài này sẽ gắn với một chương trình quyên góp và có một ảnh đại diện và 5 ảnh nội dung bài.
Loại bài này sẽ chia theo loại nội dung : Trái Tim Voi Vàng và Đất Voi Vàng

Loại bài này sẽ có chuyên mục là các category con của chuyên mục "Hoàn cảnh quyên góp"

## Các banner

- Banner của hệ thống gồm banner trang chủ (sửa trong menu Các thiết lập) , banner Trang Góp ý (sửa trong menu Các thiết lập) và banner các trang chuyên mục (sửa trong menu Các chuyên mục)

### tich hợp unipay

Sử dụng các thông tin dưới đây và xem thêm tài liệu trong `resources/documents`

```textmate
// phone 2097504175
        // https://test-api-um.unitel.com.la:8280/services/umoneyOTP/get_otp_operation?msisdn=8562097504175

        //http://127.0.0.1:8000/callback?payment_id=19&responseCode=030&paymentNumber=036371611961641&billNumber=VSU5XOREG23EY5H

        // https://vilove.tnet.vn/chung-tay-mang-den-phep-mau-y-te-cho-4-cuoc-doi-nho-khong-may-man-gap-di-tat-bam-sinh-vietnamese-19-12-2.html?payment_id=19
```
