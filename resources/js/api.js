import axios from "axios";
import { _apiUrl } from "./_constants";

const _api = axios.create({
    baseURL: `${_apiUrl}`,
    timeout: 30000,
    headers: { 'Accept': 'application/vnd.explorer.v1+json', 'Content-Type': 'application/json' }
});

_api.interceptors.request.use(function (config) {
        const { url } = config;
        if(url.indexOf('oauth/') === -1){
            let auth = JSON.parse(localStorage.auth);
            let { data } = auth;
            let { access_token, token_type } = data;
            if (access_token != null)
                config.headers.Authorization = `${token_type} ${access_token}`;
        }
        return config;
    }
);

export default _api;