# Ozeki Corporate

A lightweight WordPress corporate block theme: **international by default, Japanese-aware by design**.

The theme uses native templates, patterns, and Global Styles; system fonts only; minimal PHP; no proprietary blocks, page builder, CDN, or business functionality.

The default Global Style is an international corporate baseline. `styles/japanese-refined.json` is a selectable variation derived from practical Japanese-site requirements: Japanese-first system font fallbacks, Mincho body copy, Gothic interface and headings, restrained heading proportions, and more generous line height. No theme-file customization is required to switch styles.

The separate [`corporate-theme-rescue`](https://github.com/ozekihiroshi/corporate-theme-rescue) repository provides isolated Docker environments for development and ZIP installation tests.

## Development ZIP

Run `bash build-release.sh` to create `build/ozeki-corporate-0.1.0.zip`.
Only runtime theme files, the readme, license, and screenshot are included.
Development documentation, scripts, Git metadata and the separate demo fixtures
are excluded. This is a development artifact, not a published release.

## License

GPL-2.0-or-later. See `LICENSE`.
