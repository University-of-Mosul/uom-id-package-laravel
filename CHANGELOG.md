# Changelog

All notable changes to `uom-id-package-laravel` will be documented in this file.

## v0.0.3 - 2023-09-23

This release is responsible for the following changes:

- Remapping API routes from `/auth` to `/api/auth` (BREAKING CHANGE)
- Protecting `@me` route with `auth` middleware to return 401 on unauthenticated requests (BREAKING CHANGE)

## v0.0.2 - 2023-09-20

This release is responsible for fixing the following bug:

- `auth()->check()` always returning `true`

## v0.0.1 - 2023-07-16

This release is responsible for defining three routes:

- `@me`: Getting current user
- `login`: Logging in
- `logout` Logging out

And defining an authentication guard (`uom`)
