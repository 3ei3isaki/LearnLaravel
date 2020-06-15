function deleteItem(id) {
     let req = {
          method: "delete",
          url: `news/delete/${id}`,
     }

     axios(req).then(res => location.reload());
}