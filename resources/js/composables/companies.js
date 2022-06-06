import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

export default function useCompanies() {
    const company = ref([])
    const companies = ref([])

    const errors = ref('')
    const router = useRouter()

    const getCompanies = async () => {
        let response = await axios.get('/api/companies')
        companies.value = response.data.data
    }

    const getCompany = async (id) => {
        let response = await axios.get(`/api/companies/${id}`)
        company.value = response.data.data
    }

    const storeCompany = async (data) => {
        let test
        test =  axios.post('/api/companies', data)
        console.log(test)
        return
        errors.value = ''
        try {
            await axios.post('/api/companies', data)
            await router.push({ name: 'companies.index' })
        } catch (error) {
            if (error.response.status === 422) {
                for (const key in error.response.data.errors) {
                    errors.value += error.response.data.errors[key][0] + ' ';
                }
            }
        }
    }

    const updateCompany = async (id) => {
        errors.value= ''
        try {
            await axios.patch(`/api/companies/${id}`, company.value)
            await router.push({ name: 'companies.index' })
        } catch (error) {
            if (error.response.status === 422) {
                for (const key in error.response.data.errors) {
                    errors.value += error.response.data.errors[key][0] + ' ';
                }
            }
        }
    }

    const destroyCompany = async (id) => {
        await axios.delete(`/api/companies/${id}`)
    }

    return {
        errors,
        company,
        companies,
        getCompanies,
        getCompany,
        storeCompany,
        updateCompany,
        destroyCompany
    }
}