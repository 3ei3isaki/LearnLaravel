function deleteNewsItem(id) {
     let req = {
          method: "delete",
          url: `news/delete/${id}`,
     }

     axios(req).then(res => location.reload());
}

function deleteCategorysItem(id) {
     let req = {
          method: "delete",
          url: `/LearnLaravel/public/admin/categorys/delete/${id}`,
     }

     axios(req).then(res => location.reload());
}