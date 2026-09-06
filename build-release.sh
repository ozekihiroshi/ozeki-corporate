#!/usr/bin/env bash
set -euo pipefail
root=$(cd -- "$(dirname -- "${BASH_SOURCE[0]}")" && pwd)
version=$(sed -n 's/^Version: //p' "$root/style.css" | tr -d '\r')
[[ "$version" =~ ^[0-9]+\.[0-9]+\.[0-9]+$ ]]
stage=$(mktemp -d /tmp/ozeki-corporate-build.XXXXXXXX)
mkdir "$stage/ozeki-corporate"
for entry in style.css functions.php theme.json readme.txt LICENSE parts patterns templates styles; do
  cp -R "$root/$entry" "$stage/ozeki-corporate/"
done
if [[ -f "$root/screenshot.png" ]]; then cp "$root/screenshot.png" "$stage/ozeki-corporate/"; fi
if [[ -n $(find "$stage/ozeki-corporate" -type l -print -quit) ]]; then echo 'Symlinks are not allowed' >&2; exit 1; fi
# Normalize distribution text without changing the working tree.
find "$stage/ozeki-corporate" -type f ! -name '*.png' -exec sed -i 's/\r$//' {} +
mkdir -p "$root/build"
(cd "$stage" && zip -q -r "ozeki-corporate-$version.zip" ozeki-corporate)
cp "$stage/ozeki-corporate-$version.zip" "$root/build/"
sha256sum "$root/build/ozeki-corporate-$version.zip"
echo "staging=$stage"
