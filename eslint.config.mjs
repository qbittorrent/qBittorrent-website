import ESLint from "@eslint/js";
import Globals from "globals";
import Html from "eslint-plugin-html";
import Stylistic from '@stylistic/eslint-plugin';
import TsESLint from 'typescript-eslint';

export default [
    ESLint.configs.recommended,
    Stylistic.configs['disable-legacy'],
    ...TsESLint.configs.strictTypeChecked,
    ...TsESLint.configs.stylisticTypeChecked,
    {
        files: [
            "**/*.html",
            "**/*.ts"
        ],
        languageOptions: {
            ecmaVersion: 2023,
            globals: {
                ...Globals.browser
            },
            parserOptions: {
                project: true,
                tsconfigDirName: import.meta.dirname,
            }
        },
        plugins: {
            Html,
            Stylistic
        },
        rules: {
            "curly": ["error", "multi-or-nest", "consistent"],
            "eqeqeq": "error",
            "guard-for-in": "error",
            "no-undef": "off",
            "no-unused-vars": "off",
            "no-var": "error",
            "operator-assignment": "error",
            "prefer-arrow-callback": "error",
            "prefer-const": "error",
            "radix": "error",
            "@typescript-eslint/no-unused-vars": [
                "error",
                {
                    "argsIgnorePattern": "^_",
                    "caughtErrorsIgnorePattern": "^_",
                    "varsIgnorePattern": "^_",
                }
            ],
            "Stylistic/no-mixed-operators": [
                "error",
                {
                    "groups": [
                        ["&", "|", "^", "~", "<<", ">>", ">>>", "==", "!=", "===", "!==", ">", ">=", "<", "<=", "&&", "||", "in", "instanceof"]
                    ]
                }
            ],
            "Stylistic/nonblock-statement-body-position": ["error", "below"],
            "Stylistic/quotes": [
                "error",
                "double",
                {
                    "avoidEscape": true,
                    "allowTemplateLiterals": true
                }
            ],
            "Stylistic/semi": "error",
            "Stylistic/spaced-comment": ["error", "always", { "exceptions": ["*"] }]
        }
    }
];
