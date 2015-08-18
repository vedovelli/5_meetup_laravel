module.exports = {
    getCervejarias: function()
    {
        this.$http.get('http://api.beer.app/cervejarias',function(result)
        {
            this.cervejarias = result;
        });
    }
};