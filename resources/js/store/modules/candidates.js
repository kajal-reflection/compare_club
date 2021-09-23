const state = {
    candidates: [],
    list:[],
    test:[]
};

const getters = {
    getCandidates: state => state.candidates,
};

const mutations = {
    SET_CANDIDATES(state, payload) {
        state.candidates = payload;
    },
    SET_LIST(state, payload){
        state.list = payload;
    }
};

const actions = {
    setCandidates({commit}, payload) {
        commit('SET_CANDIDATES', payload);
    },
    setList({commit}, payload) {
        commit('SET_LIST', payload);
    }
};

export default {
    namespaced: true,
    state,
    actions,
    mutations,
    getters,
}
