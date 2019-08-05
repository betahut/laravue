import _api from "../../../api";

const ftpList = async ({ commit, state }, _auth) => {
    commit('ftpList', { listLoading: true });
    await _api.get('/ftp/list').then((res) => {
        const { data } = res;
        const { list } = data;
        commit('ftpList', { listLoading: false, list: list, staus: res.status, error: '' });
    }).catch((err) => {
        err && err.response && commit('ftpList', { listLoading: false, staus: err.response.status, error: err.response.data, list: '' });
    });
}

export default {
    ftpList
}