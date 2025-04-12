# Contributing to Fluent Forms Stubs

Thank you for considering contributing to the Fluent Forms Stubs project! This document provides guidelines and instructions to help you contribute effectively.

## Code of Conduct

In the interest of fostering an open and welcoming environment, we expect all contributors to be respectful and considerate of others.

## Ways to Contribute

There are several ways you can contribute to this project:

1. **Reporting Issues**: Report bugs, inaccuracies, or missing stubs
2. **Suggesting Enhancements**: Propose new features or improvements
3. **Documentation**: Improve or add documentation
4. **Code Contributions**: Submit patches or new features

## Reporting Issues

When reporting issues, please include:

- A clear, descriptive title
- A detailed description of the issue
- Steps to reproduce the problem
- Expected behavior vs. actual behavior
- Fluent Forms version you're using
- PHP version you're using

Submit issues through the [GitHub issue tracker](https://github.com/mralaminahamed/phpstan-fluent-forms-stubs/issues).

## Pull Request Process

1. **Fork the Repository**: Create your own fork of the project
2. **Create a Branch**: Create a branch for your feature or fix
   ```bash
   git checkout -b feature/your-feature-name
   ```
3. **Make Changes**: Implement your changes
4. **Run Tests**: Ensure your changes pass all tests
5. **Update Documentation**: Update documentation to reflect your changes
6. **Submit Pull Request**: Create a pull request against the main repository

## Development Workflow

### Setting Up the Development Environment

1. Clone your fork of the repository
   ```bash
   git clone https://github.com/mralaminahamed/phpstan-fluent-forms-stubs.git
   cd phpstan-fluent-forms-stubs
   ```

2. Install dependencies
   ```bash
   composer install
   ```

### Generating Stubs

Stubs are generated from the Fluent Forms source code:

1. Update `fluentform_versions.txt` with the versions you want to support
2. Run the generation script:
   ```bash
   ./bin/generate.sh
   ```

### Testing Your Changes

Run tests to ensure your changes don't break existing functionality:

```bash
composer test
```

### Coding Standards

This project follows PSR-12 coding standards. To check your code:

```bash
composer check-style
```

To automatically fix style issues:

```bash
composer fix-style
```

## Version Support

When adding support for a new Fluent Forms version:

1. Add the version to `fluentform_versions.txt`
2. Generate stubs for that version
3. Test the stubs with PHPStan
4. Update documentation if necessary

## Documentation

Good documentation is crucial. When contributing new features or changes, please:

1. Update the relevant documentation files
2. Add inline documentation for new code
3. Update the README.md if necessary

## Release Process

The maintainers will handle releases following this process:

1. Update CHANGELOG.md with the new version
2. Tag the release in Git
3. Create a GitHub release
4. Publish to Packagist

## Questions?

If you have questions about contributing, feel free to:

- Open an issue labeled as 'question'
- Reach out to the maintainers

Thank you for your contributions!
