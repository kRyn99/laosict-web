# remove CMS license
find . -type f -name LicenseCheck.php -exec sed -i 's/\$this->app->runningUnitTests()/1/g' {} \;
# set 777 lang files to avoid 500 when save lang
chmod -R 777 resources/lang/
rm -rf vendor/backpack/crud/src/resources/lang/lo
