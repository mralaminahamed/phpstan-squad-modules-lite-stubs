# Usage Guide for Fluent Forms Stubs

This guide will walk you through using Fluent Forms stubs to improve your development workflow with static analysis and IDE autocompletion.

## Installation

### Via Composer (Recommended)

The recommended way to install the stubs is via Composer:

```bash
composer require --dev mralaminahamed/fluent-forms-stubs
```

### Manual Installation

If you prefer manual installation:

1. Download the stub files:
   - `fluent-forms-stubs.stub`
   - `fluent-forms-constants-stubs.stub`
2. Place them in a directory within your project

## Configuration

### PHPStan Configuration

To use these stubs with PHPStan, add them to your `phpstan.neon` configuration file:

```yaml
parameters:
    bootstrapFiles:
        - vendor/mralaminahamed/fluent-forms-stubs/fluent-forms-constants-stubs.stub
        - vendor/mralaminahamed/fluent-forms-stubs/fluent-forms-stubs.stub
```

Alternative configuration if you're including the entire package:

```yaml
includes:
    - vendor/mralaminahamed/fluent-forms-stubs/phpstan.neon
```

### IDE Configuration

Most modern IDEs (PHPStorm, VS Code with PHP extensions, etc.) will automatically recognize the stubs when installed via Composer.

#### Manual IDE Configuration

If you installed the stubs manually or your IDE doesn't recognize them:

- **PHPStorm**: Go to Settings → Languages & Frameworks → PHP → Include Path and add the path to the stubs
- **VS Code**: Update your PHP IntelliSense configuration to include the path to the stubs

## Benefits of Using Stubs

### Improved Static Analysis

With these stubs, PHPStan can:

- Detect type errors when working with Fluent Forms functions and classes
- Identify potential issues before runtime
- Validate correct usage of Fluent Forms APIs

### Better Development Experience

Stubs also enhance your IDE experience with:

- Accurate code completion for Fluent Forms functions and classes
- Parameter type hinting
- Function and method return type information
- Quick documentation and code navigation

## Troubleshooting

### Common Issues

1. **Stubs not recognized by PHPStan**:
   - Verify the paths in your PHPStan configuration
   - Check that the stubs are properly installed

2. **IDE not showing autocompletions**:
   - Restart your IDE
   - Clear IDE caches
   - Verify the stubs are in your include path

3. **Version mismatches**:
   - Check that the stub version matches the Fluent Forms version you're using

For additional help, please [create an issue](https://github.com/mralaminahamed/phpstan-fluent-forms-stubs/issues) on GitHub. 