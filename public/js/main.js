document.addEventListener('DOMContentLoaded', () => {
	const toastEl = document.getElementById('demo-toast');
	if (toastEl && window.bootstrap?.Toast) {
		const toast = bootstrap.Toast.getOrCreateInstance(toastEl, { delay: 2500 });
		toast.show();
		const btn = document.getElementById('test-alert');
		if (btn) {
			btn.addEventListener('click', () => toast.show());
		}
	}
});
