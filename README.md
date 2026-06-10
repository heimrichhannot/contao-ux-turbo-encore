# Contao UX Turbo Encore

This bundle adds Symfony UX Turbo support to Contao projects using the H&H [Encore Bundle](https://github.com/heimrichhannot/contao-encore-bundle).

It provides ready-to-use Encore entries for Hotwire Turbo, so Turbo can be added to a Contao page without creating the JavaScript entry yourself.

> This bundle is currently in early development and may receive breaking changes. Use with caution in production environments.

## Features

- Adds Symfony UX Turbo to Contao
- Provides a default Turbo Encore entry
- Provides a Turbo entry without Turbo Drive
- Adds Turbo reload attributes to Encore scripts and styles

## Installation

Install via Composer or Contao Manager.

```bash
composer require heimrichhannot/contao-ux-turbo-encore
```

After installation, prepare and build your Encore assets as usual.

## Usage

Add one of the provided Encore entries to the pages where Turbo should be active:

- `Turbo (UX Turbo Encore)`
- `Turbo without Drive (UX Turbo Encore)`

Use the default Turbo entry if the page should use Turbo Drive for faster navigation.

Use the entry without Drive if you only want to use Turbo features such as frames or streams in selected places.

After that, you can use Turbo in your Contao templates, for example with native `<turbo-frame>` markup.

## License

This bundle is licensed under the LGPL-3.0-or-later license.
