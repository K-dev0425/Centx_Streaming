<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Supersim\V1;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class UsageRecordOptions {
    /**
     * @param string $sim SID or unique name of a Sim resource. Only show
     *                    UsageRecords representing usage incurred by this Super
     *                    SIM.
     * @param string $fleet SID or unique name of a Fleet resource. Only show
     *                      UsageRecords representing usage for Super SIMs
     *                      belonging to this Fleet resource at the time the usage
     *                      occurred.
     * @param string $network SID of a Network resource. Only show UsageRecords
     *                        representing usage on this network.
     * @param string $isoCountry Alpha-2 ISO Country Code. Only show UsageRecords
     *                           representing usage in this country.
     * @param string $group Dimension over which to aggregate usage records.
     * @param string $granularity Time-based grouping that UsageRecords should be
     *                            aggregated by. Can be: `hour`, `day`, or `all`.
     *                            Default is `all`.
     * @param \DateTime $startTime Only include usage that occurred at or after
     *                             this time.
     * @param \DateTime $endTime Only include usage that occurred before this time.
     * @return ReadUsageRecordOptions Options builder
     */
    public static function read(string $sim = Values::NONE, string $fleet = Values::NONE, string $network = Values::NONE, string $isoCountry = Values::NONE, string $group = Values::NONE, string $granularity = Values::NONE, \DateTime $startTime = Values::NONE, \DateTime $endTime = Values::NONE): ReadUsageRecordOptions {
        return new ReadUsageRecordOptions($sim, $fleet, $network, $isoCountry, $group, $granularity, $startTime, $endTime);
    }
}

class ReadUsageRecordOptions extends Options {
    /**
     * @param string $sim SID or unique name of a Sim resource. Only show
     *                    UsageRecords representing usage incurred by this Super
     *                    SIM.
     * @param string $fleet SID or unique name of a Fleet resource. Only show
     *                      UsageRecords representing usage for Super SIMs
     *                      belonging to this Fleet resource at the time the usage
     *                      occurred.
     * @param string $network SID of a Network resource. Only show UsageRecords
     *                        representing usage on this network.
     * @param string $isoCountry Alpha-2 ISO Country Code. Only show UsageRecords
     *                           representing usage in this country.
     * @param string $group Dimension over which to aggregate usage records.
     * @param string $granularity Time-based grouping that UsageRecords should be
     *                            aggregated by. Can be: `hour`, `day`, or `all`.
     *                            Default is `all`.
     * @param \DateTime $startTime Only include usage that occurred at or after
     *                             this time.
     * @param \DateTime $endTime Only include usage that occurred before this time.
     */
    public function __construct(string $sim = Values::NONE, string $fleet = Values::NONE, string $network = Values::NONE, string $isoCountry = Values::NONE, string $group = Values::NONE, string $granularity = Values::NONE, \DateTime $startTime = Values::NONE, \DateTime $endTime = Values::NONE) {
        $this->options['sim'] = $sim;
        $this->options['fleet'] = $fleet;
        $this->options['network'] = $network;
        $this->options['isoCountry'] = $isoCountry;
        $this->options['group'] = $group;
        $this->options['granularity'] = $granularity;
        $this->options['startTime'] = $startTime;
        $this->options['endTime'] = $endTime;
    }

    /**
     * SID or unique name of a Sim resource. Only show UsageRecords representing usage incurred by this Super SIM.
     *
     * @param string $sim SID or unique name of a Sim resource. Only show
     *                    UsageRecords representing usage incurred by this Super
     *                    SIM.
     * @return $this Fluent Builder
     */
    public function setSim(string $sim): self {
        $this->options['sim'] = $sim;
        return $this;
    }

    /**
     * SID or unique name of a Fleet resource. Only show UsageRecords representing usage for Super SIMs belonging to this Fleet resource at the time the usage occurred.
     *
     * @param string $fleet SID or unique name of a Fleet resource. Only show
     *                      UsageRecords representing usage for Super SIMs
     *                      belonging to this Fleet resource at the time the usage
     *                      occurred.
     * @return $this Fluent Builder
     */
    public function setFleet(string $fleet): self {
        $this->options['fleet'] = $fleet;
        return $this;
    }

    /**
     * SID of a Network resource. Only show UsageRecords representing usage on this network.
     *
     * @param string $network SID of a Network resource. Only show UsageRecords
     *                        representing usage on this network.
     * @return $this Fluent Builder
     */
    public function setNetwork(string $network): self {
        $this->options['network'] = $network;
        return $this;
    }

    /**
     * Alpha-2 ISO Country Code. Only show UsageRecords representing usage in this country.
     *
     * @param string $isoCountry Alpha-2 ISO Country Code. Only show UsageRecords
     *                           representing usage in this country.
     * @return $this Fluent Builder
     */
    public function setIsoCountry(string $isoCountry): self {
        $this->options['isoCountry'] = $isoCountry;
        return $this;
    }

    /**
     * Dimension over which to aggregate usage records. Can be: `sim`, `fleet`, `network`, `isoCountry`. Default is to not aggregate across any of these dimensions, UsageRecords will be aggregated into the time buckets described by the `Granularity` parameter.
     *
     * @param string $group Dimension over which to aggregate usage records.
     * @return $this Fluent Builder
     */
    public function setGroup(string $group): self {
        $this->options['group'] = $group;
        return $this;
    }

    /**
     * Time-based grouping that UsageRecords should be aggregated by. Can be: `hour`, `day`, or `all`. Default is `all`. `all` returns one UsageRecord that describes the usage for the entire period.
     *
     * @param string $granularity Time-based grouping that UsageRecords should be
     *                            aggregated by. Can be: `hour`, `day`, or `all`.
     *                            Default is `all`.
     * @return $this Fluent Builder
     */
    public function setGranularity(string $granularity): self {
        $this->options['granularity'] = $granularity;
        return $this;
    }

    /**
     * Only include usage that occurred at or after this time, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. Default is one month before the `end_time`.
     *
     * @param \DateTime $startTime Only include usage that occurred at or after
     *                             this time.
     * @return $this Fluent Builder
     */
    public function setStartTime(\DateTime $startTime): self {
        $this->options['startTime'] = $startTime;
        return $this;
    }

    /**
     * Only include usage that occurred before this time, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. Default is the current time.
     *
     * @param \DateTime $endTime Only include usage that occurred before this time.
     * @return $this Fluent Builder
     */
    public function setEndTime(\DateTime $endTime): self {
        $this->options['endTime'] = $endTime;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Supersim.V1.ReadUsageRecordOptions ' . $options . ']';
    }
}