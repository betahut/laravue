import axios from "axios";
import { _apiUrl } from "./_constants";
import { mapGetters } from "vue";

const _api = axios.create({
    baseURL: `${_apiUrl}`,
    timeout: 30000,
    headers: { 'Accept': 'application/vnd.explorer.v1+json', 'Content-Type': 'application/json' }
});

_api.interceptors.request.use(
    function (config) {
        const { url } = config;
        if(url.indexOf('/api/') !== -1 && url.indexOf('/oauth/') === -1){
            console.log(mapGetters(['auth']), "__ATUT");
            const token = '';
            if (token != null)
                config.headers.Authorization = `Bearer ${token}`;
        }
        return config;
    }
);

export {
    _api
}