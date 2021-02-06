import store from '@/store'

class Auth {
    user() {
        return store.state.user
    }
    id() {
        return store.state.user.id
    }
    check() {
        return Boolean(store.state.user.id)
    }
}

export default new Auth()