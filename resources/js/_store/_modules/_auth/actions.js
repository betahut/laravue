import { _api } from "../../../api";
import { _clientSecret, _clientId } from "../../../_constants";

const login = async ({ commit, state }, _auth) => {
    commit('login', { isLoading: true, isLoggedIn: false });
    const authentication = JSON.parse(localStorage.getItem("auth"));
    if (authentication){
        commit('login', authentication);
    }else{
        await _api.post('oauth/token', { client_id: _clientId, client_secret: _clientSecret, scope: '*', username: `${_auth.email}`, password: `${_auth.password}`, grant_type: 'password'
        }).then((res) => {
            let response = { isLoading: false, isLoggedIn: true, staus: res.status, error: '', data: res.data };
            commit('login', response);
            localStorage.setItem('auth', JSON.stringify(response));
        }).catch((err) => {
            err && err.response && commit('login', { isLoading: false, isLoggedIn: false, staus: err.response.status, error: err.response.data, data: '' });
        });
    }
}

export default {
    login
}