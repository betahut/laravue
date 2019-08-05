const login = (state, _auth) => { state.auth = _auth; };
const logout = state => { state.auth = null; };

export default {
    login, logout
};