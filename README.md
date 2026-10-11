# Ozeki Corporate

Build a business site with WordPress blocks. Ozeki Corporate gives companies,
independent professionals, and small teams a calm starting point for presenting
their services, people, and work.

Keep the site editable. Native templates, patterns, blocks, and Global Styles
let you maintain content with standard WordPress tools. The English-first
starter includes an optional **Japanese Refined** style with Japanese typography,
plus setup guidance in English and Japanese.

## Get the theme

Ozeki Corporate is published on [WordPress.org](https://wordpress.org/themes/ozeki-corporate/).
In WordPress, open **Appearance > Themes > Add New**, search for **Ozeki Corporate**,
then install and activate it. The directory release documented here is 0.3.0.

Start with your services page. Open **Appearance > Ozeki Corporate Guide**,
choose a starter pattern, replace the example content, and review the page
on desktop and mobile. [The setup guide](GETTING-STARTED.md) covers navigation,
contact destinations, and the optional styles.

## What is included

- English-first corporate homepage, About, Services, Company and Contact starters.
- Reusable representative-message, case-study, services, process, company-table
  and contact sections with shared spacing and typography.
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

1. Install from [WordPress.org](https://wordpress.org/themes/ozeki-corporate/), or upload its ZIP from **Appearance > Themes > Add New > Upload Theme**.
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

This creates `build/ozeki-corporate-0.3.0.zip`. The ZIP includes runtime theme
files, the starter image and provenance, guides, license and screenshot. It
excludes Git metadata, development documentation, build scripts and separate
test fixtures.

Versioned installation ZIPs are published in GitHub Releases after validation.
GitHub and WordPress.org have separate release workflows. A local build or
merge to `main` does not update the published directory package; use the
[WordPress.org listing](https://wordpress.org/themes/ozeki-corporate/) to check
the version offered to site administrators.

The separate
[`corporate-theme-rescue`](https://github.com/ozekihiroshi/corporate-theme-rescue)
repository contains isolated development, installed-ZIP, compatibility,
accessibility and visual-validation environments. Candidate hashes and curated
test reports are recorded there.

## Translation maintenance

PHP patterns translate the template interface text, including navigation,
search, empty results and the footer. The distribution includes
`languages/ozeki-corporate.pot`; regenerate it with `bash update-pot.sh`
using WP-CLI's i18n command after changing translatable strings.
Local theme translations use locale filenames such as `ja.mo` in `languages`.
WordPress.org language packs are supported as well. Saved user content and
customized template parts remain user-managed.

## Project boundaries

Forms, email delivery, SEO, analytics, backups and custom post types belong in
WordPress core, hosting configuration or suitable plugins. Patterns are editable
starting content, not synchronized demo pages. Theme updates do not replace
saved pages, navigation, templates or Global Styles.

## License

GPL-2.0-or-later. See [LICENSE](LICENSE). Bundled asset provenance and replacement
guidance are documented in [assets/images/README.txt](assets/images/README.txt).
