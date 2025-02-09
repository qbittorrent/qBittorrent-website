import { defineConfig } from "html-validate";

export default defineConfig({
    extends: [
        "html-validate:document",
        "html-validate:recommended"
    ],
    rules: {
        "heading-level": "off",
        "no-inline-style": "off",
        "require-sri": ["error", { target: "crossorigin" }],
        "valid-id": ["error", { relaxed: true }],
        "wcag/h71": "off"
    }
});
