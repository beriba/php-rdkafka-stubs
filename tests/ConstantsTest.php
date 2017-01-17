<?php

class ConstantsTest extends \PHPUnit_Framework_TestCase
{
    public function testConstantsExist()
    {
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__BEGIN'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__BAD_MSG'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__BAD_COMPRESSION'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__DESTROY'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__FAIL'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__TRANSPORT'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__CRIT_SYS_RESOURCE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__RESOLVE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__MSG_TIMED_OUT'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__PARTITION_EOF'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__UNKNOWN_PARTITION'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__FS'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__UNKNOWN_TOPIC'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__ALL_BROKERS_DOWN'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__INVALID_ARG'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__TIMED_OUT'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__QUEUE_FULL'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__ISR_INSUFF'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__END'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_UNKNOWN'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_NO_ERROR'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_OFFSET_OUT_OF_RANGE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_MSG'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_UNKNOWN_TOPIC_OR_PART'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_MSG_SIZE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_LEADER_NOT_AVAILABLE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_NOT_LEADER_FOR_PARTITION'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_REQUEST_TIMED_OUT'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_BROKER_NOT_AVAILABLE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_REPLICA_NOT_AVAILABLE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_MSG_SIZE_TOO_LARGE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_STALE_CTRL_EPOCH'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_OFFSET_METADATA_TOO_LARGE'));
        $this->assertTrue(defined('RD_KAFKA_CONSUMER'));
        $this->assertTrue(defined('RD_KAFKA_OFFSET_BEGINNING'));
        $this->assertTrue(defined('RD_KAFKA_OFFSET_END'));
        $this->assertTrue(defined('RD_KAFKA_OFFSET_STORED'));
        $this->assertTrue(defined('RD_KAFKA_PARTITION_UA'));
        $this->assertTrue(defined('RD_KAFKA_PRODUCER'));
        $this->assertTrue(defined('RD_KAFKA_VERSION'));
        $this->assertTrue(defined('RD_KAFKA_CONF_UNKNOWN'));
        $this->assertTrue(defined('RD_KAFKA_CONF_INVALID'));
        $this->assertTrue(defined('RD_KAFKA_CONF_OK'));
        $this->assertTrue(defined('RD_KAFKA_MSG_PARTITIONER_RANDOM'));
        $this->assertTrue(defined('RD_KAFKA_MSG_PARTITIONER_CONSISTENT'));
        $this->assertTrue(defined('RD_KAFKA_LOG_PRINT'));
        $this->assertTrue(defined('RD_KAFKA_LOG_SYSLOG'));
        $this->assertTrue(defined('RD_KAFKA_LOG_SYSLOG_PRINT'));
    }
}
