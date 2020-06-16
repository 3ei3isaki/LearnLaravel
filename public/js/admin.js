function deleteNewsItem(id) {
     let req = {
          method: "delete",
          url: `/admin/news/delete/${id}`,
     }

     axios(req).then(res => location.reload());
}

function deleteCategorysItem(id) {
     let req = {
          method: "delete",
          url: `/admin/categorys/delete/${id}`,
     }

     axios(req).then(res => location.reload());
}