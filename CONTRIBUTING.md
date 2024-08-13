# Contributor Guidelines

Thank you for considering contributing to the Laravel Greeting Package! Your involvement helps make this project better for everyone.

## Table of Contents

- [Code of Conduct](#code-of-conduct)
- [How to Contribute](#how-to-contribute)
  - [Reporting Issues](#reporting-issues)
  - [Submitting Pull Requests](#submitting-pull-requests)
- [Development Setup](#development-setup)
- [Coding Standards](#coding-standards)
- [Testing](#testing)
- [Documentation](#documentation)
- [License](#license)

## Code of Conduct

Please note that this project is released with a [Contributor Code of Conduct](CODE_OF_CONDUCT.md). By participating in this project, you agree to abide by its terms.

## How to Contribute

### Reporting Issues

- If you find a bug or have a feature request, please open an issue on the [GitHub repository](https://github.com/iantoo/greeting-package/issues).
- Provide as much detail as possible, including steps to reproduce the issue and any relevant information about your environment.

### Submitting Pull Requests

1. **Fork the Repository:**
   - Fork the repository to your own GitHub account.

2. **Create a Feature Branch:**
   - Create a new branch from `main` for your feature or bugfix:
     ```bash
     git checkout -b feature/your-feature-name
     ```

3. **Make Your Changes:**
   - Implement your changes following the [Coding Standards](#coding-standards) outlined below.

4. **Write Tests:**
   - Ensure your changes are covered by tests. See the [Testing](#testing) section for details.

5. **Commit Your Changes:**
   - Write clear, concise commit messages.
     ```bash
     git commit -m "Add feature: Your feature description"
     ```

6. **Push to Your Fork:**
   - Push your changes to your forked repository:
     ```bash
     git push origin feature/your-feature-name
     ```

7. **Open a Pull Request:**
   - Go to the original repository and submit a pull request from your feature branch.
   - Provide a detailed description of your changes and any additional context needed for review.

## Development Setup

1. **Clone the Repository:**
   - Clone your fork of the repository:
     ```bash
     git clone https://github.com/your-username/greeting-package.git
     cd greeting-package
     ```

2. **Install Dependencies:**
   - Install the necessary dependencies using Composer:
     ```bash
     composer install
     ```

3. **Running Tests:**
   - Run the tests to ensure everything is set up correctly:
     ```bash
     ./vendor/bin/phpunit
     ```

## Coding Standards

- **Follow PSR-12:** This package adheres to the [PSR-12 coding standard](https://www.php-fig.org/psr/psr-12/). Please ensure your code complies with this standard.
- **Document Your Code:** Use PHPDoc to document your classes, methods, and properties.
- **Maintain Consistency:** Keep the code style consistent with the rest of the project.

## Testing

- **Write Tests:** Ensure that your code changes are covered by appropriate unit tests.
- **Run Tests:** Before submitting your pull request, make sure all tests pass.
  ```bash
  ./vendor/bin/phpunit
  ```
- **Test Coverage:** Aim to maintain or improve the current test coverage.

## Documentation

- **Update Documentation:** If your changes affect the usage or configuration of the package, update the relevant documentation files.
- **Language Support:** Ensure that any new features are properly documented in both English and Kiswahili, if applicable.

## License

By contributing to the Laravel Greeting Package, you agree that your contributions will be licensed under the [MIT License](LICENSE).
