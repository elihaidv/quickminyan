module.exports = {
  "outputDir": "/home/vanunu/LaravelProjects/quickminyan/public/dist",
  "devServer": {
    "proxy": {
      "/api": {
        "target": "http://localhost:8000/",
        "changeOrigin": true
      }
    }
  },
  "transpileDependencies": [
    "vuetify"
  ]
}