# Distribution guide review — 2026-09-09

Source/documentation walkthrough, not a new novice-user study or installed-ZIP UI
test. Existing uncommitted release preparation changes preserved.

- Appearance guide exists, is permission-checked and read-only. No import,
  activation redirect or settings writes added.
- Existing homepage instructions cover Front Page versus page editing, image
  replacement/processing, alt text, 5:4 crops, upload limits, originals and saving.
- Four page starters, titles, drafts, independent content and navigation are covered.
- Contact guidance covers real destinations and separately testing form delivery.
- Gap fixed in English/Japanese: Pages versus Posts, latest-three posts, private
  reference notes, and menu removal versus unpublishing. Admin links open standard
  post creation/list screens; links do not create content by themselves.
- Complete guide adds separate Posts page setup and explains that its editor body
  is not the news list. Trash guidance avoids unnecessary permanent deletion.
- Existing publishing checklist covers fictional content, links, phone layout,
  alt text, keyboard checks, reload and backups; retained.

Checked against patterns/latest-news.php (postType post, perPage 3, date descending),
templates/index.html and the guide code. Customized AWS settings may differ.
No frontend pattern, layout or styles changed in this checkpoint.

Safari evidence: environment repo docs/safari-user-check-2026-09-09.md. Basic checks
and limited VoiceOver do not establish full accessibility conformance.

Before release: build a new candidate ZIP containing these guide edits and verify
its guide text/links in an installed copy; earlier 0.2.0 artifact lacks these edits.
No new full matrix/browser pass claimed. No AWS update, deletion, commit/push,
tag, Release or submission performed.
