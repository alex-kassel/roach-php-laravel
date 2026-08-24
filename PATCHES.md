# Internal Vendor Patches — `roach-php/laravel`

This file documents all custom internal patches applied to the local `roach-php/laravel` package.

---

## [Patch-001] Laravel 13 Support & Default Spider Namespace Configuration

- **Date**: 2026-04-13 – 2026-05-14
- **Author**: alex-kassel (`alex-kassel@users.noreply.github.com`)
- **Commits**: `14fdb611d096fb030325c770cec4a003d21a1aa3`, `eda2f33de72320ef7339c236165720f548e82e59`, `d05002b0111dc66f0efb3a354e75547b1272506c`
- **Target Files**: `composer.json`, `config/roach.php`, ServiceProviders.
- **Problem Statement**: Standard upstream roach-php/laravel lacked compatibility with Laravel 13 framework releases and required custom spider namespace configuration.
- **Fix Summary**:
  1. Added support for Laravel 13 in `composer.json` constraints.
  2. Updated default spider namespace configuration to align with monorepo package conventions.
  3. Relocated package paths for internal monorepo autoloading.
