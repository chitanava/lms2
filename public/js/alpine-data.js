document.addEventListener('alpine:init', () => {
  Alpine.data('active', () => ({
    async toggle(payload){
      const response = await fetch(payload.url, {
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json, text-plain, */*',
          'X-Requested-With': 'XMLHttpRequest',
          'X-CSRF-TOKEN': payload.token
        },
        method: 'post',
        credentials: 'same-origin',
        body: JSON.stringify({
          id: payload.id
        })
      });
      
      if (response.status === 200) {
        const data = await response.json();
        console.log(data.topic);
      }
    }
  }))
})