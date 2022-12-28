# Github Actions Test

This is a super basic WP plugin for testing how [Github Actions](https://github.com/features/actions) work, focusing on the use of PHPCS and PHPCBF.

## Usage

Install the plugin, and make edits to `github-actions.php`.  When you push your code, check the [Actions](https://github.com/johnregan3/github-actions-test/actions) tab for the PHPCS run status.

## Other Files

- `deploy.yml` is a Github action to deploy to Flywheel.
- `main.yml` is an experiment using 10up's sweet WPCS action.

### Credits/Uses

- actions/checkout
- [10up/wpcs-action](https://github.com/10up/wpcs-action)
- [johnregan3/wpcs-phpcbf-action](https://github.com/johnregan3/wpcs-phpcbf-action) (fork of 10up's action with `phpcbf` added)
- easingthemes/ssh-deploy
