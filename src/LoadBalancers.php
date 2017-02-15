<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\LoadBalancers\AddDropletsLoadBalancerRequest;
use wappr\digitalocean\Requests\LoadBalancers\AddForwardingRulesRequest;
use wappr\digitalocean\Requests\LoadBalancers\CreateLoadBalancerRequest;
use wappr\digitalocean\Requests\LoadBalancers\CreateWithTagLoadBalancerRequest;
use wappr\digitalocean\Requests\LoadBalancers\DeleteLoadBalancerRequest;
use wappr\digitalocean\Requests\LoadBalancers\ListAllLoadBalancerRequest;
use wappr\digitalocean\Requests\LoadBalancers\RemoveDropletsLoadBalancerRequest;
use wappr\digitalocean\Requests\LoadBalancers\RemoveForwardingRulesRequest;
use wappr\digitalocean\Requests\LoadBalancers\RetrieveLoadBalancerRequest;
use wappr\digitalocean\Requests\LoadBalancers\UpdateLoadBalancerRequest;

class LoadBalancers extends Resources
{
    public function create(CreateLoadBalancerRequest $createLoadBalancerRequest)
    {
    }

    public function createWithTag(CreateWithTagLoadBalancerRequest $createWithTagLoadBalancerRequest)
    {
    }

    public function retrieve(RetrieveLoadBalancerRequest $retrieveLoadBalancerRequest)
    {
    }

    public function listAll(ListAllLoadBalancerRequest $listAllLoadBalancerRequest)
    {
    }

    public function update(UpdateLoadBalancerRequest $updateLoadBalancerRequest)
    {
    }

    public function delete(DeleteLoadBalancerRequest $deleteLoadBalancerRequest)
    {
    }

    public function addDroplets(AddDropletsLoadBalancerRequest $addDropletsLoadBalancerRequest)
    {
    }

    public function removeDroplets(RemoveDropletsLoadBalancerRequest $removeDropletsLoadBalancerRequest)
    {
    }

    public function addForwardingRules(AddForwardingRulesRequest $addForwardingRulesRequest)
    {
    }

    public function removeForwardingRules(RemoveForwardingRulesRequest $removeForwardingRulesRequest)
    {
    }
}
