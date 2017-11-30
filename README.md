# portal
Source of the new portal

[![StyleCI](https://styleci.io/repos/111126398/shield?style=flat-square)](https://styleci.io/repos/111126398)
[![GitHub issues](https://img.shields.io/github/issues/PHPMap/portal.svg?style=flat-square)](https://github.com/PHPMap/portal/issues)
[![GitHub forks](https://img.shields.io/github/forks/PHPMap/portal.svg?style=flat-square)](https://github.com/PHPMap/portal/network)
[![GitHub stars](https://img.shields.io/github/stars/PHPMap/portal.svg?style=flat-square)](https://github.com/PHPMap/portal/stargazers)
[![GitHub license](https://img.shields.io/github/license/PHPMap/portal.svg?style=flat-square)](https://github.com/PHPMap/portal/blob/master/LICENSE)
[![Gratipay](https://img.shields.io/gratipay/project/PHPMap.svg?style=flat-square)](https://gratipay.com/PHPMap/)
[![StackShare](https://img.shields.io/badge/tech-stack-0690fa.svg?style=flats-square)](https://stackshare.io/fwartner/phpmap)

## About PHPMap

PHPMap is an interactive map of PHP-Developers around the world.
You will be able to organize meetups & usergroups, work on projects together with developers around you or simply have a look, who´s next to you.

##### Features

- Meet other php-developers around you
- Organize meetups & usergroups in your area
- Discuss with developers around you using the forums
- Work on projects together
- Find awesome projects
- Have a look, who´s next to you
- Create own articles / tutorials and more
- Many more..

## Development

First clone the repository:

```git clone https://github.com/phpmap/portal.git```

After you cloned the portal, make sure to follow the next steps:

```bash
cd /path/to/your/cloned/portal

cp .env.example .env
composer install
yarn / npm install (Yarn is way faster)

php artisan migrate --seed // This will migrate the database & seed the initial data
php artisan db:seed --class=DevelopmentSeeder // This will seed development data
```

## Contributing

Thank you for considering contributing to PHPMap! Checkout the `CONTRIBUTING.md` file in the repo for more information.

## Sponsors

PHPMap is sponsored by

<a target='_blank' rel='nofollow' href='https://app.codesponsor.io/link/56PVTMQwwLE1eNFhmArVx3xr/PHPMap/phpmap'>
  <img alt='Sponsor' width='888' height='68' src='https://app.codesponsor.io/embed/56PVTMQwwLE1eNFhmArVx3xr/PHPMap/phpmap.svg' />
</a>


## Backers

Wanna be shown here? Make sure to support PHPMap on Patreon!

## Security Vulnerabilities

If you discover a security vulnerability within PHPMap, please send an e-mail to Florian Wartner at f.wartner@phpmap.co. All security vulnerabilities will be promptly addressed.

## Donate

If you would like to support this project, feel free to donate.

[![Gratipay](https://img.shields.io/gratipay/project/PHPMap.svg?style=flat-square)](https://gratipay.com/PHPMap)
[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg?style=flat-square)](https://paypal.me/florianwartner)
## License

PHPMap is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).