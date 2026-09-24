#!/usr/bin/env bash
set -euo pipefail
root=$(cd -- "$(dirname -- "${BASH_SOURCE[0]}")" && pwd)
wp i18n make-pot "$root" "$root/languages/ozeki-corporate.pot" \
  --slug=ozeki-corporate --domain=ozeki-corporate --exclude=build,docs,.git
