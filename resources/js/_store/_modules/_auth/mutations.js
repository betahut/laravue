const login = (state, _auth) => { state.auth = _auth; };
const logout = state => { state.isLoggedIn = false; };

export default {
    login, logout
};