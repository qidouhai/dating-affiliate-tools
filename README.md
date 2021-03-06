# Dating Affiliate Tools (DAT)

*DAT is a Useful and Powerful affiliate tools to increase/boost easily your Affiliate Programs.*

#### Is it difficult and painful to get more traction/users to the affiliates services you promote on your website?

#### You tried to display affiliate banners, but the conversion rates is really poor?

#### What you really need is a simple way to get affiliate commissions in the same time than a simple action on your website. Users will be much likely to use the affiliate service. The users won't leave your website's page (unlike clicking on affiliate banners) and you won't have more work to do..

#### **DAT Registration** tool is just a simple piece of code to add on any registration forms asking (with a input checkbox field) if they also want to be registered on a "friend" partner service to increase the chance of solving their problem (like dating someone for a dating service).


## How DAT Works?

1. Frontend code. On your POST registration form
```html
<input type="checkbox" name="register_to_partner" value="1" />
```

2. Backend code. When the user submit the form
```php
use DAT\Service\Identifier\Affiliate as AffiliateId;
use DAT\Service\Provider\TAC\EveFlirt;
use DAT\Tool\Client\Registration;

if (!empty($_POST['register_to_partner'])) {
    // if user consented it
    $aData = [
        // user data to send to the affiliate platform
    ];

    $oAffiliateId = new AffiliateId('<YOUR_AFFILIATE_ID>');
    $oEveFlirt = new EveFlirt($oAffiliateId);

    $oRegister = new Registration($oEveFlirt, $aData);
    $oRegister->random(); // Optional. Sets the registration niche random
    $oRegister->send();
}
```


## Requirements

* [PHP 5.6](http://php.net) or higher
* [Composer](https://getcomposer.org)
* [cURL PHP](http://php.net/manual/en/book.curl.php) library


## Installation

* Install Composer (https://getcomposer.org)
* Then, include it in your project:
```bash
composer require ph-7/dating-affiliate-tools
 ```


## Who I Am?

**[Pierre-Henry Soria](http://ph7.me)**, a passionate software engineer and creator of [pH7CMS](https://github.com/pH7Software/pH7-Social-Dating-CMS), for instance.


## Where to Contact Me?

*pierrehenrysoria+github [[AT]] gmail [[D0T]] com*


## Disclaimer

*The purpose of those tools is to help webmasters and affiliate programs to increase their revenue, but the DAT tools (Dating Affiliate Tools) have to be used only if their usage respect the affiliate platform's terms.*

You CANNOT use this library against the TOS of the services present in this library.
There are there as an example, and it is your responsability to check the up-to-date TOS and/or speak to your affiliate manager of the affiliate program(s) to see if you can use those tools.

YOU are fully responsible of the usage of it and YOU CANNOT use it illegally or against those Web services. This present library (Dating-Affiliation-Tools / DAT) and myself (the present author) cannot be in any case responsible of the usage you make with it.


## License

Under [General Public License 3](http://www.gnu.org/licenses/gpl.html) or later.
