<script>
    import Replies from '../components/RepliesComponent';
    import subscribeButton from '../components/SubscribeButton';

    export default {

        props: ['initialRepliesCount'],

        components : {
            Replies,
            subscribeButton
        },

        data() {
            return {
                repliesCount: this.initialRepliesCount
            }
        }
    }
</script>