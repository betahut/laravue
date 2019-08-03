import axios from "axios";
// import store from "./store";
import { _siteUrl } from "./_constants";

export const _api = axios.create({
    baseURL: `${_siteUrl}`,
    timeout: 30000,
    headers: { 'Accept': 'application/vnd.Laravel.v1+json', 'Content-Type': 'application/json' }
});

_api.interceptors.request.use(
    function (config) {
        const { url } = config;
        if(url.indexOf('/api/') !== -1){
            const token = '';
            if (token != null) {
                config.headers.Authorization = `Bearer ${token}`;
            }
        }
        return config;
    }
    // , function (err) {
    //     return Promise.reject(err);
    // }
);