
Netzmacht Contao Build Tools
===========================

This extension provides build tools used in Netzmacht development projects. Do not use this package in production
environment.

It's main goal it to make development/testing possible/easier with Contao. It provides:

 * A replacement of the Contao class loader which loads the Contao classes from the vendor/contao/core directory. This 
   is useful so that the Contao classes can be used for mocks using phpspec
 * A phpspec task for the [CCABS](https://github.com/contao-community-alliance/build-system)
 * `netzmacht.main.xml` to extend the default build process. It includes the phpspec task compared to the 
   `cca/build-system-all-tasks`. It's also used to ensure that the build process won't fail because of changes in the
   upstream `ccabs.main.xml`


Installation
------------

```json
{
    "require-dev": {
        "netzmacht/contao-build-tools": "1.0.x-dev"
    }
}
```