document.getElementById('filter_manufacturer_id').addEventListener('change',
function(){
    let companyId = this.value || this.options[this.selectedIndex].value;
    //generate a query string
    //http://localhost:8000/cars?manufacturer_id=2
    window.location.href = window.location.href.split("?")[0] + '?manufacturer_id='+companyId
    //use split to elminate the scenario of repeating the company id on the query string
})