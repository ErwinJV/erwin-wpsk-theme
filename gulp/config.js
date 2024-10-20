module.exports = {
  css: {
    src: ["./css/modules/*.css"],
    dest: "./dist/css/",
  },
  js: {
    src: ["./js/src/*.js", "./js/src/modules/*.js"],
    dest: "./dist/js/",
  },
  tailwind: {
    src: ["./*.php", 
          "./views/partials/**/*.php",
          "./views/partials/**/**/*.php",
          "./css/tailwind/*.css",
          "./includes/**/*.php"
        ],
  },
 
};
