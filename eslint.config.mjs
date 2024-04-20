import Globals from "globals";
import Html from "eslint-plugin-html";
import Js from "@eslint/js";
import Stylistic from '@stylistic/eslint-plugin';

export default [
    Js.configs.recommended,
    Stylistic.configs['disable-legacy'],
    {
        files: [
            "**/*.html",
            "**/*.cjs",
            "**/*.js",
            "**/*.mjs"
        ],
        languageOptions: {
            ecmaVersion: 2021,
            globals: {
                ...Globals.browser
            }
        },
        plugins: {
            Html,
            Stylistic
        },
        rules: {
            "no-undef": "off",
            "no-unused-vars": "off",
            "Stylistic/no-mixed-operators": [
                "error",
                {
                    "groups": [
                        ["&", "|", "^", "~", "<<", ">>", ">>>", "==", "!=", "===", "!==", ">", ">=", "<", "<=", "&&", "||", "in", "instanceof"]
                    ]
                }
            ],
            "Stylistic/nonblock-statement-body-position": ["error", "below"],
            "Stylistic/semi": "error"
        }
    }
];
