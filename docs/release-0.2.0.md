# Ozeki Corporate 0.2.0 candidate

## Current candidate — 2026-09-09

The September 7 artifact below is historical. The current guide-update candidate
is `build/rc-2026-09-09/ozeki-corporate-0.2.0.zip` (878,861 bytes), SHA-256
`82b716afb313ba2088650b04c9c50bfd1c0eef1fcd798410bf0f56c30e4b9cb4`.
All eight PHP 8.1–8.4 / WordPress 6.6 and 7.1 cases passed, including Theme Check
and guide runtime checks. Installed-ZIP English/Japanese guide UI checks passed
on 8091. See the environment repository's `docs/candidate-2026-09-09.md`.
Limited user Safari/VoiceOver evidence is in `docs/safari-user-check-2026-09-09.md`;
it does not establish comprehensive accessibility conformance. AWS still uses
the September 7 candidate. No new tag or release has been created.

## Historical checkpoint — 2026-09-07

Prepared 2026-09-07. This is not yet a GitHub Release or WordPress.org submission.
Do not replace the existing v0.1.0 tag or its published artifact.

## Artifact

- `build/ozeki-corporate-0.2.0.zip` (877,758 bytes).
- SHA-256: `694b832d8469057becb60ac835554f330456ff6ceca0d0b9049ad31727960c3f`.
- 32 files match source, allowing build-time CRLF normalization.
- Includes runtime files, English screenshot, GPL-2 full text and later-version
  permission, bundled image/provenance, and English/Japanese setup guide.
- Excludes development scripts, docs, node_modules, Git files and demo fixtures.

## Changes

- English business starters, local example photo and updated theme screenshot.
- Optional Appearance guide, four native page starters, navigation and launch
  checklist. No activation redirect, automatic import or saved-content reset.
- Company-table wrapping for mobile and Japanese/mixed-language content.
- Optimize the existing PNG URL to 1200 x 675 / 366,984 bytes. Existing saved
  pattern references remain valid. The full-resolution original remains in the
  environment repository; the distributed image was visually checked.
- Include full GPL-2 text instead of just the license notice.

## Verification boundary

See the environment repository's `docs/release-0.2.0-validation.md` for final
matrix and UI evidence. Earlier artifacts with image-size warnings are rejected
candidates, not this artifact. The exact hash identifies the tested ZIP.
The environment's Theme Check wrapper now fails on non-INFO findings even when
the upstream command exits successfully.

New manual Safari/VoiceOver and complete accessibility testing are not claimed.
No AWS update, commit/push, tag, Release or submission is part of this checkpoint.
AWS still has the previous development ZIP; 8091 has this candidate installed.
