<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.0@9f3e3f3cc5399604c0325d5ffa92609d694d950d',
  'doctrine/dbal' => '2.10.4@47433196b6390d14409a33885ee42b6208160643',
  'doctrine/doctrine-bundle' => '2.2.2@044d33eeffdb236d5013b6b4af99f87519e10751',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => '2.8.1@242cf1a33df1b8bc5e1b86c3ebd01db07851c833',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'dompdf/dompdf' => 'v1.0.2@8768448244967a46d6e67b891d30878e0e15d25c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'oro/doctrine-extensions' => '1.3.1@3dd513580393ba8a1040c2095e2949ce549cb038',
  'phenx/php-font-lib' => '0.5.2@ca6ad461f032145fff5971b5985e5af9e7fa88d8',
  'phenx/php-svg-lib' => 'v0.3.3@5fa61b65e612ce1ae15f69b3d223cb14ecc60e32',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sabberworm/php-css-parser' => '8.3.1@d217848e1396ef962fb1997cf3e2421acba7f796',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v5.1.9@19c59713f750642206b21a1edec5c18dea80f979',
  'symfony/cache' => 'v5.1.9@f81360f9acb25aa356bc662d8b32bfaa70d264a9',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.1.9@25fe2a2d023c38ade5dbc2d80679462592284ed5',
  'symfony/console' => 'v5.1.9@037b57ac42cafb64b7b55273fe1786f35d623077',
  'symfony/dependency-injection' => 'v5.1.9@8b2ec9f453430252379aea343d02ed3579b18b44',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.1.9@f8824e9c5adf3040fd64254e4d453fbc1bacf30c',
  'symfony/dotenv' => 'v5.1.9@264ca18dd6e4ab3cfa525ee52cceff9540a1019e',
  'symfony/error-handler' => 'v5.1.9@4be32277488607e38ad1108b08ca200882ef6077',
  'symfony/event-dispatcher' => 'v5.1.9@2c660884ec9413455af753515140ce696913693c',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/filesystem' => 'v5.1.9@bb92ba7f38b037e531908590a858a04d85c0e238',
  'symfony/finder' => 'v5.1.9@fd8305521692f27eae3263895d1ef1571c71a78d',
  'symfony/flex' => 'v1.11.0@ceb2b4e612bd0b4bb36a4d7fb2e800c861652f48',
  'symfony/form' => 'v5.1.9@56847a7c9df55341b6e99ec8ba8a097e9f66be73',
  'symfony/framework-bundle' => 'v5.1.9@d070863c197c6eb72ed3a54611b0a1bc5749ecc2',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v5.1.9@1e6e9e28369ddd3fd66ca14a469c21ae9b51969a',
  'symfony/http-kernel' => 'v5.1.9@2d0daaf17c9fe14eb3519b94b83d746554ecfd9c',
  'symfony/intl' => 'v5.1.9@eaac169bf64d307d48daef7e349729d670df6659',
  'symfony/mime' => 'v5.1.9@698cab643bbb517a0d9d317e2ec9fc1636e97f1f',
  'symfony/options-resolver' => 'v5.1.9@c6a02905e4ffc7a1498e8ee019db2b477cd1cc02',
  'symfony/polyfill-intl-grapheme' => 'v1.20.0@c7cf3f858ec7d70b89559d6e6eb1f7c2517d479c',
  'symfony/polyfill-intl-icu' => 'v1.20.0@c44d5bf6a75eed79555c6bf37505c6d39559353e',
  'symfony/polyfill-intl-idn' => 'v1.20.0@3b75acd829741c768bc8b1f84eb33265e7cc5117',
  'symfony/polyfill-intl-normalizer' => 'v1.20.0@727d1096295d807c309fb01a851577302394c897',
  'symfony/polyfill-mbstring' => 'v1.20.0@39d483bdf39be819deabf04ec872eb0b2410b531',
  'symfony/polyfill-php73' => 'v1.20.0@8ff431c517be11c78c48a39a66d37431e26a6bed',
  'symfony/polyfill-php80' => 'v1.20.0@e70aa8b064c5b72d3df2abd5ab1e90464ad009de',
  'symfony/property-access' => 'v5.1.9@d979b802a230cce0e7ff0d60e643c5d74edb2daf',
  'symfony/property-info' => 'v5.1.9@5bc012adfe3d365db3cec3b050513950b19966b3',
  'symfony/routing' => 'v5.1.9@461b184cfe5c2e677bbd67761aa377914ab48a16',
  'symfony/security-bundle' => 'v5.1.9@1060810a1dc7361304c50d4aa2569fe5b4da60c6',
  'symfony/security-core' => 'v5.1.9@a6d771e97bf3886e3ff5bdcf93f358e81bd873b4',
  'symfony/security-csrf' => 'v5.1.9@d98a521e3c7ffa15c142e8b1e68a55fdeb58d4b7',
  'symfony/security-guard' => 'v5.1.9@e9d11fd6fcdb27ca5b83db44093289a1d6a3b771',
  'symfony/security-http' => 'v5.1.9@a3a65306b8bf48611bd85deec8acccd4e8bcae0b',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.1.9@fcda7f14c3b39d33f9c788aea9afb1b5f5c288c6',
  'symfony/string' => 'v5.1.9@a97573e960303db71be0dd8fda9be3bca5e0feea',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v5.1.9@49a58af9f34ffcb11ef47d1ba1f8425396a6eac4',
  'symfony/twig-bundle' => 'v5.1.9@370bb30a9e8dc2b0c29791eec300b0b529bd783f',
  'symfony/validator' => 'v5.1.9@acf84937b932fe575e4e4892eecee5a6c5ca8b78',
  'symfony/var-dumper' => 'v5.1.9@006fc2312ee014e1ba46c01185423c010310d00f',
  'symfony/var-exporter' => 'v5.1.9@fbc3507f23d263d75417e09a12d77c009f39676c',
  'symfony/web-profiler-bundle' => 'v5.1.9@2e18206d542245c8abbdad3270067aae9995dba7',
  'symfony/yaml' => 'v5.1.9@bb73619b2ae5121bbbcd9f191dfd53ded17ae598',
  'twig/extra-bundle' => 'v3.1.1@a7c5799cf742ab0827f5d32df37528ee8bf5a233',
  'twig/twig' => 'v3.1.1@b02fa41f3783a2616eccef7b92fbc2343ffed737',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'nikic/php-parser' => 'v4.10.3@dbe56d23de8fcb157bbc0cfb3ad7c7de0cfb0984',
  'symfony/maker-bundle' => 'v1.31.1@4f57a44cef0b4555043160b8bf223fcde8a7a59a',
  'paragonie/random_compat' => '2.*@b2c6ab165da55d8b48045716d655eaa27d629604',
  'symfony/polyfill-ctype' => '*@b2c6ab165da55d8b48045716d655eaa27d629604',
  'symfony/polyfill-iconv' => '*@b2c6ab165da55d8b48045716d655eaa27d629604',
  'symfony/polyfill-php72' => '*@b2c6ab165da55d8b48045716d655eaa27d629604',
  'symfony/polyfill-php71' => '*@b2c6ab165da55d8b48045716d655eaa27d629604',
  'symfony/polyfill-php70' => '*@b2c6ab165da55d8b48045716d655eaa27d629604',
  'symfony/polyfill-php56' => '*@b2c6ab165da55d8b48045716d655eaa27d629604',
  '__root__' => 'dev-master@b2c6ab165da55d8b48045716d655eaa27d629604',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
