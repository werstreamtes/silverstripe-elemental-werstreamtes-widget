# SilverStripe Elemental WerStreamt.es? Widget

<!-- TOC -->
* [SilverStripe Elemental WerStreamt.es? Widget](#silverstripe-elemental-werstreamtes-widget)
    * [Requirements](#requirements)
    * [Installation](#installation)
    * [Good to know](#good-to-know)
<!-- TOC -->

### Requirements
This widget is designed for use with [silverstripe/framework](https://github.com/silverstripe/silverstripe-framework) and [dnadesign/silverstripe-elemental](https://github.com/silverstripe/silverstripe-elemental).

### Installation
Install the widget using composer:

```shell
composer require werstreamtes/silverstripe-elemental-werstreamtes-widget
```

or via composer.json:
```json
"require" : {
    "werstreamtes/silverstripe-elemental-werstreamtes-widget" : "1.0.0",
}
```

### Good to know

If you are part of the WerStreamt.es partner program, you can create a config file or use a existing config and override the PartnerTag with your own.

```
WSE\Elemental\Model\WerStreamtEsWidget:
  partnerTag: "YOUR_PARTNER_TAG"
```

Feel free to reach out if you have any questions or issues!