import en from "./lang/en.json"
import ar from "./lang/ar.json"
import { createApp } from 'vue'
import { createI18n } from 'vue-i18n'

const i18n = createI18n({
    locale:localStorage.getItem('lang') || 'en',
    messages:{
        en:en,
        ar:ar
    }
  })
const app = createApp()
app.use(i18n)
export default  i18n;