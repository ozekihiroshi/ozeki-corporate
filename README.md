# Ozeki Corporate

A calm, practical WordPress block theme for business websites, with an
English-first starter experience and first-class Japanese typography.

Ozeki Corporate is intended for companies, independent professionals and small
teams that need a credible site without a proprietary page builder. It uses
native WordPress templates, patterns, blocks and Global Styles, so the resulting
content remains editable with standard WordPress tools.

## What is included

- English-first corporate homepage, About, Services, Company and Contact starters.
- A locally bundled, replaceable example image with documented provenance.
- An optional **Japanese Refined** Global Style using Mincho body copy, Gothic
  headings and Japanese-tested line height and wrapping.
- A disciplined 4–96px spacing scale and a compact business color palette.
- **Soft Shadow** for Image blocks and **Key Point** for Group blocks as opt-in
  block styles; ordinary blocks remain deliberately plain.
- Responsive navigation, archives, search, 404, posts, pages, comments,
  password-protected content and classic page breaks.
- English/Japanese setup guidance under **Appearance > Ozeki Corporate Guide**.

The theme does not import demo pages, translate content, send contact messages,
collect analytics, load remote fonts, use a CDN or require a companion plugin.

## Requirements

- WordPress 6.6 or later
- PHP 8.1 or later

## Install and start

1. Upload the versioned ZIP from **Appearance > Themes > Add New > Upload Theme**.
2. Activate Ozeki Corporate.
3. Open **Appearance > Ozeki Corporate Guide**.
4. Replace the example company text and photograph, create the required pages,
   connect navigation and configure a real contact destination.
5. Review the site while logged out on desktop and mobile before publishing.

See [GETTING-STARTED.md](GETTING-STARTED.md) for detailed English and Japanese
instructions, including image limits, navigation, contact setup, content types
and the optional block styles.

## Design approach

The default Global Style is an international corporate baseline. The palette
uses Ink and Navy for structure, neutral grays for surfaces and borders, and the
original Deep Teal only for links and small accents. Japanese Refined changes
presentation rather than language and can be selected from the Site Editor's
Styles panel without editing theme files.

Spacing, font sizes and line heights use controlled choices instead of arbitrary
one-off values. This helps non-designers keep page rhythm and hierarchy
consistent while still allowing normal block editing.

## Development ZIP

Run:

```sh
bash build-release.sh
```

This creates `build/ozeki-corporate-0.2.2.zip`. The ZIP includes runtime theme
files, the starter image and provenance, guides, license and screenshot. It
excludes Git metadata, development documentation, build scripts and separate
test fixtures.

The source tree currently represents the 0.2.2 release candidate. The latest
published GitHub release remains v0.2.0 until the candidate is deliberately
tagged and released. A local build or merge to `main` is not itself a public
release and does not update WordPress.org.

The separate
[`corporate-theme-rescue`](https://github.com/ozekihiroshi/corporate-theme-rescue)
repository contains isolated development, installed-ZIP, compatibility,
accessibility and visual-validation environments. Candidate hashes and curated
test reports are recorded there.

## Project boundaries

Forms, email delivery, SEO, analytics, backups and custom post types belong in
WordPress core, hosting configuration or suitable plugins. Patterns are editable
starting content, not synchronized demo pages. Theme updates do not replace
saved pages, navigation, templates or Global Styles.

## License

GPL-2.0-or-later. See [LICENSE](LICENSE). Bundled asset provenance and replacement
guidance are documented in [assets/images/README.txt](assets/images/README.txt).
