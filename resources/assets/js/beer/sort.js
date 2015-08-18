module.exports = {
    doSort: function(ev, column)
    {
        this.$set('column', column);
        this.$set('reverse', !this.reverse); // toggle
    }
};