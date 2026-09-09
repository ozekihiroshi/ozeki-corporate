# Ozeki Corporate

A considered starting point for your business website, built with native WordPress blocks.

The English starter composition includes a locally bundled example image and
editable business copy. Replace them with your own photographs and story.
Japanese content is supported through deliberate typography, wrapping and the
optional Japanese Refined style; that style does not translate page content.

The theme uses native templates, patterns, and Global Styles; system fonts only; minimal PHP; no proprietary blocks, page builder, CDN, or business functionality.

The default Global Style is an international corporate baseline. `styles/japanese-refined.json` is a selectable variation derived from practical Japanese-site requirements: Japanese-first system font fallbacks, Mincho body copy, Gothic interface and headings, restrained heading proportions, and more generous line height. No theme-file customization is required to switch styles.

The separate [`corporate-theme-rescue`](https://github.com/ozekihiroshi/corporate-theme-rescue) repository provides isolated Docker environments for development and ZIP installation tests.

## Development ZIP

Run `bash build-release.sh` to create `build/ozeki-corporate-0.2.0.zip`.
Runtime theme files, bundled starter imagery and its provenance, the readme,
license, and screenshot are included.
Development documentation, scripts, Git metadata and the separate demo fixtures
are excluded. A locally built ZIP is a development artifact, not automatically
a published release. Do not replace the published v0.1.0 asset with development
changes; finalize a new version after acceptance checks.

## Getting started

See [GETTING-STARTED.md](GETTING-STARTED.md) for English and Japanese instructions
for replacing images, checking upload limits and connecting the contact section.

## License

GPL-2.0-or-later. See `LICENSE`.
