import { _api } from "../../../api";
import { _clientSecret, _clientId } from "../../../_constants";

const ftpList = async ({ commit, state }, _auth) => {
    commit('login', { isLoading: true, isLoggedIn: false });
    await _api.get('/ftp/list').then((res) => {
        console.log(res);
    }).catch((err) => {
        console.log(err && err.response);
        // err && err.response && commit('login', { isLoading: false, isLoggedIn: false, staus: err.response.status, error: err.response.data, data: '' });
    });
}

export default {
    ftpList
}