function showToast(message, type = 'info') {
    const toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
    });

    toast.fire({
        icon: type,
        title: message
    });
}

async function handleExpenseUpdate(id, amount) {
    try {
        const response = await fetch(`/dashboard/expense/${id}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ amount: amount })
        });

        const data = await response.json();

        if (data.status === 'validation') {
            // Budget exceeded - ask for confirmation
            const result = await Swal.fire({
                title: 'Attention!',
                text: 'Cette modification dépassera le budget. Voulez-vous continuer?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Oui, continuer',
                cancelButtonText: 'Annuler'
            });

            if (result.isConfirmed) {
                // Retry with force flag
                return handleExpenseUpdateForced(id, amount);
            }
            return false;
        }

        if (data.status === 'warning') {
            showToast(data.message, 'warning');
        } else if (data.status === 'success') {
            showToast(data.message, 'success');
        } else if(data.status ==='error') {
            showToast(data.message, 'error');
            return false;
        }

        return true;
    } catch (error) {
        showToast('Erreur lors de la modification', 'error');
        return false;
    }
}

async function handleExpenseUpdateForced(id, amount) {
    try {
        const response = await fetch(`/dashboard/expense/${id}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ amount: amount, force: 1 })
        });

        const data = await response.json();
        showToast(data.message, data.status === 'warning' ? 'warning' : 'success');
        return true;
    } catch (error) {
        showToast('Erreur lors de la modification', 'error');
        return false;
    }
}
