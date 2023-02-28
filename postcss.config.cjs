const postcssFlexbugsFixes = require('postcss-flexbugs-fixes');
const postcssPresetEnv = require('postcss-preset-env');
// const stylelint = require('stylelint');
const cssnano = require('cssnano');

module.exports = {
    plugins: [
      //  stylelint(
      //   {
      //   extends:"stylelint-config-recommended-scss",
      //   rules: {
      //     "font-family-name-quotes": "always-where-required",
      //     "function-url-no-scheme-relative": true,
      //     "function-url-quotes": "always",
      //     "string-quotes": "double",
      //     "value-keyword-case": [
      //       "lower",
      //       {
      //         "ignoreKeywords":["optimizeSpeed"],
      //       }
      //     ],
      //     "unit-disallowed-list": [],
      //     "max-empty-lines": 2,
      //     "no-descending-specificity": true,
      //     "no-duplicate-selectors": true,
      //     "font-family-no-missing-generic-family-keyword": null,
      //     "property-no-unknown": [
      //       true,
      //       {
      //         "ignoreProperties": ["/^lost-/"]
      //       }
      //     ],
      //     "selector-pseudo-class-no-unknown": [true, { "ignorePseudoClasses": ["global"] }],
      //   },
      //   ignoreFiles: ["node_modules/*"],
      //   defaultSeverity: "error",
      //   customSyntax: "postcss-html"
      //  }),
       postcssFlexbugsFixes({}),
       postcssPresetEnv(
        {
          autoprefixer: {
            flexbox: "no-2009",
            grid: "autoplace"
          },
          stage: 3,
          browsers: ["last 2 versions", "not dead", "ios >= 8"]
       }
       ),
       cssnano({
        preset: 'default',
       }),
    ],
  };