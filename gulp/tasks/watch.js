const { watch } = require("gulp");

const { js, tailwind } = require("../config.js");

// const { compileCss } = require("./compileCss.js");
const { compileJs } = require("./compileJs.js");
const { tailwindStyles } = require("./tailwindStyles.js");

function watchFiles(done) {
  watch(js.src, compileJs);
  watch(tailwind.src, tailwindStyles);
//   watch(css.src, compileCss);

  done();
}

exports.watch = watchFiles;
